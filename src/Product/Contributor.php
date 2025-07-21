<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList17;
use Ribal\Onix\Text;

class Contributor
{

	private const CODE_AUTHOR = 'A01';

    /**
     * SequenceNumber
     *
     * @var int
     */
    protected $SequenceNumber;

    /**
     * ContributorRole
     *
     * @var CodeList
     */
    protected $ContributorRole;

    /**
     * Array of NameIdentifiers
     *
     * @var array|NameIdentifier
     */
    protected $NameIdentifier = [];

    /**
     * TitlesBeforeNames
     *
     * @var string
     */
    protected $TitlesBeforeNames = '';

    /**
     * NamesBeforeKey
     *
     * @var string
     */
    protected $NamesBeforeKey;

    /**
     * CorporateName
     *
     * @var string
     */
    protected $CorporateName;

    /**
     * BiographicalNote
     *
     * @var string
     */
    protected $BiographicalNote;

    /**
     * KeyNames
     *
     * @var string
     */
    protected $KeyNames;

    /**
     * SuffixToKey
     *
     * @var string
     */
    protected $SuffixToKey = '';

    /**
     * LettersAfterNames
     *
     * @var string
     */
    protected $LettersAfterNames = '';

	/**
	 * ContributorDescription (b048)
	 *
	 * @var string
	 */
	protected $ContributorDescription = '';

    /**
     * Set SequenceNumber
     *
     * @param int $SequenceNumber
     * @return void
     */
    public function setSequenceNumber(string $SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
    }

    /**
     * Set ContributorRole
     *
     * @param string $ContributorRole
     * @return void
     */
    public function setContributorRole(CodeList17 $ContributorRole)
    {
        $this->ContributorRole = $ContributorRole;
    }

    /**
     * Add NameIdentifier
     *
     * @param NameIdentifier $NameIdentifier
     * @return void
     */
    public function addNameIdentifier(NameIdentifier $NameIdentifier)
    {
        $this->NameIdentifier[] = $NameIdentifier;
    }

    /**
     * Remove NameIdentifier
     *
     * @param NameIdentifier $NameIdentifier
     * @return void
     */
    public function removeNameIdentifier(NameIdentifier $NameIdentifier)
    {
        $this->NameIdentifier[] = $NameIdentifier;
    }

    /**
     * Set TitlesBeforeNames
     *
     * @param string $TitlesBeforeNames
     * @return void
     */
    public function setTitlesBeforeNames(string $TitlesBeforeNames)
    {
        $this->TitlesBeforeNames = $TitlesBeforeNames;
    }

    /**
     * Set NamesBeforeKey
     *
     * @param string $NamesBeforeKey
     * @return void
     */
    public function setNamesBeforeKey(string $NamesBeforeKey)
    {
        $this->NamesBeforeKey = $NamesBeforeKey;
    }

    /**
     * Set KeyNames
     *
     * @param string $KeyNames
     * @return void
     */
    public function setKeyNames(string $KeyNames)
    {
        $this->KeyNames = $KeyNames;
    }

    /**
     * Set SuffixToKey
     *
     * @param string $SuffixToKey
     * @return void
     */
    public function setSuffixToKey(string $SuffixToKey)
    {
        $this->SuffixToKey = $SuffixToKey;
    }

    /**
     * Set LettersAfterNames
     *
     * @param string $LettersAfterNames
     * @return void
     */
    public function setLettersAfterNames(string $LettersAfterNames)
    {
        $this->LettersAfterNames = $LettersAfterNames;
    }

    /**
     * Set BiographicalNote
     *
     * @param string $BiographicalNote
     * @return void
     */
    public function setBiographicalNote(Text $BiographicalNote)
    {
        $this->BiographicalNote = $BiographicalNote;
    }

	/**
	 * Set ContributorDescription
	 *
	 * @param string $ContributorDescription
	 * @return void
	 */
	public function setContributorDescription(string $ContributorDescription)
	{
		$this->ContributorDescription = $ContributorDescription;
	}

    /**
     * Get SequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * Get ContributorRole
     *
     * @return CodeList
     */
    public function getContributorRole()
    {
        return $this->ContributorRole;
    }

    /**
     * Get NameIdentifiers
     *
     * @return array
     */
    public function getNameIdentifier()
    {
        return $this->NameIdentifier;
    }

    /**
     * Get NameIdentifiers
     *
     * @return array
     */
    public function getNameIdentifiers()
    {
        return $this->NameIdentifier;
    }

    /**
     * Get TitlesBeforeNames
     *
     * @return string
     */
    public function getTitlesBeforeNames()
    {
        return $this->TitlesBeforeNames;
    }

    /**
     * Get NamesBeforeKey
     *
     * @return string
     */
    public function getNamesBeforeKey()
    {
        return $this->NamesBeforeKey;
    }

    /**
     * Get KeyNames
     *
     * @return string
     */
    public function getKeyNames()
    {
        return $this->KeyNames;
    }

    /**
     * Get SuffixToKey
     *
     * @return string
     */
    public function getSuffixToKey()
    {
        return $this->SuffixToKey;
    }

    /**
     * Get LettersAfterNames
     *
     * @return string
     */
    public function getLettersAfterNames()
    {
        return $this->LettersAfterNames;
    }

    /**
     * Get BiographicalNote
     *
     * @return string
     */
    public function getBiographicalNote()
    {
        return $this->BiographicalNote;
    }

    /**
     * An alias function for getNamesBeforeKey
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->getNamesBeforeKey();
    }

    /**
     * An alias for getKeyNames
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->getKeyNames();
    }

    /**
     * Get CorporateName
     *
     * @return string
     */
    public function getCorporateName()
    {
        return $this->CorporateName;
    }

	/**
	 * Get ContributorDescription
	 *
	 * @return string
	 */
	public function getContributorDescription()
	{
		return $this->ContributorDescription;
	}

    /**
     * Set CorporateName
     *
     * @param string $CorporateName
     * @return void
     */
    public function setCorporateName(string $CorporateName)
    {
        $this->CorporateName = $CorporateName;
    }

    /**
     * Determine if the contributor is a corporate contributor
     *
     * @return boolean
     */
    public function isCorporateContributor(): bool
    {
        return !empty($this->CorporateName);
    }

    /**
     * Determine if the contributor is an author
     *
     * @return boolean
     */
    public function isAuthor()
    {
        return $this->ContributorRole->getCode() === self::CODE_AUTHOR;
    }
}
